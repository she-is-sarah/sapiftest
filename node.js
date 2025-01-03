const fs = require('fs').promises;
const path = require('path');

const SEPARATOR = '<!-- PHP-HTML-CONVERTER-BOUNDARY -->';

async function checkIncludes() {
    try {
        const includesPath = path.join(process.cwd(), 'includes');
        const headerPath = path.join(includesPath, 'header.php');
        const footerPath = path.join(includesPath, 'footer.php');

        const [headerContent, footerContent] = await Promise.all([
            fs.readFile(headerPath, 'utf8'),
            fs.readFile(footerPath, 'utf8')
        ]);

        return { headerContent, footerContent };
    } catch (error) {
        throw new Error('Required includes folder with header.php and footer.php not found');
    }
}

async function convertToHTML() {
    const { headerContent, footerContent } = await checkIncludes();
    const files = await fs.readdir(process.cwd());
    
    for (const file of files) {
        if (file.endsWith('.php') && !file.includes('includes')) {
            const content = await fs.readFile(file, 'utf8');
            
            let htmlContent = content
                .replace("<?php include './includes/header.php'; ?>", 
                    `${SEPARATOR}\n${headerContent}\n${SEPARATOR}`)
                .replace("<?php include './includes/footer.php'; ?>", 
                    `${SEPARATOR}\n${footerContent}\n${SEPARATOR}`);
            
            const htmlFileName = file.replace('.php', '.html');
            await fs.writeFile(htmlFileName, htmlContent);
            await fs.unlink(file); // Delete PHP file after conversion
        }
    }
}

async function convertToPHP() {
    const files = await fs.readdir(process.cwd());
    
    for (const file of files) {
        if (file.endsWith('.html')) {
            const content = await fs.readFile(file, 'utf8');
            const parts = content.split(SEPARATOR);
            
            let phpContent = "<?php include './includes/header.php'; ?>\n";
            if (parts.length >= 3) {
                phpContent += parts[2];
            }
            phpContent += "\n<?php include './includes/footer.php'; ?>";
            
            const phpFileName = file.replace('.html', '.php');
            await fs.writeFile(phpFileName, phpContent);
            await fs.unlink(file); // Delete HTML file after conversion
        }
    }
}

async function main() {
    try {
        const currentState = process.argv[2];
        
        if (currentState === 'tohtml') {
            await convertToHTML();
            console.log('Successfully converted PHP files to HTML and cleaned up');
        } else if (currentState === 'tophp') {
            await convertToPHP();
            console.log('Successfully converted HTML files to PHP and cleaned up');
        } else {
            console.log('Please specify conversion direction: tohtml or tophp');
        }
    } catch (error) {
        console.error('Error:', error.message);
        process.exit(1);
    }
}

main();
