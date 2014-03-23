<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
	->notName('LICENSE.txt')
	->notName('README.md')
	->notName('dBug.doxyfile')
	->notName('composer.*')
	->exclude('vendor')
	->in(__DIR__)
;

return Symfony\CS\Config\Config::create()
	->fixers(array('-indentation','-braces','-psr0','-controls_spaces'))
	->finder($finder)
;

