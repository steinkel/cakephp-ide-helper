<?php
return [
	 // Copy the following over to your project one in ROOT/config/
	'IdeHelper' => [
		// Controller prefixes to check for
		'prefixes' => [
			'Admin',
		],
		// Template paths to skip
		'skipTemplatePaths' => [
			'/src/Template/Bake/',
		],
		// Custom Entity field type mapping
		'typeMap' => [
		],
		// Always add annotations/meta even if not yet needed
		'preemptive' => false,
		// For meta file generator
		'generatorTasks' => [
		],
		// For code completion file generator
		'codeCompletionTasks' => [
		],
		// If a custom directory should be used, defaults to TMP otherwise
		'codeCompletionPath' => null,
	],
];