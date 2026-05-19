// simple ANSI colors
function color(text, color) {
	const colors = {
		red: '\x1b[31m',
		green: '\x1b[32m',
		yellow: '\x1b[33m',
		blue: '\x1b[36m',
		reset: '\x1b[0m'
	};

	return (colors[color] || '') + text + colors.reset;
}

// // simple
// console.log(color('[Checked]', 'green') + ': test test test. ' + color('[fail]', 'red'));

// with sleep
async function run() {
	const domains = [];
	for (let i = 1; i <= 30; i++) {
		domains.push(`molapp-${String(i).padStart(4, '0')}`);
	}

	for (const domain of domains) {
		//console.log(color('[Checked]', 'green') + `: [${domain}]... ` + color('[fail]', 'red'));
        console.log(color('[Checked]', 'green') + `: [${domain}]...`);

		await new Promise(resolve => setTimeout(resolve, 1000));
	}
}

run();