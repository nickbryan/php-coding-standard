#!/usr/bin/env bash

case "$1" in
  run) #(run): Run phpcs against the test files. If no file specified then all tests are run, otherwise the signle specified file will be run.
    docker run --rm -v $(pwd):/app -w /app php:7.4-cli vendor/bin/phpcs `if [ -z ${@:2} ];then find tests/input/* | sort; else echo tests/input/${@:2}; fi`;
  ;;
  test-report) #(test-report): Test the ruleset against the expected report.
    docker run --rm -v $(pwd):/app -w /app php:7.4-cli vendor/bin/phpcs `find tests/input/* | sort` --report=summary --report-file=phpcs.log; diff tests/expected_report.txt phpcs.log;
  ;;
  fix) #(fix): Run phpcbf on the input directory and dump results to tests/temp_fixed. This will allow checking of results before overwriting tests/fixed.
    docker run --rm -v $(pwd):/app -w /app php:7.4-cli cp -R tests/input tests/temp_fixed && vendor/bin/phpcbf tests/temp_fixed;
  ;;
  test-fix) #(test-fix) Run phpcbf on the input directory and diff tests/diff_fixed with fixed. If no diff then tets/diff_fixed will be removed.
    docker run --rm -v $(pwd):/app -w /app php:7.4-cli cp -R tests/input tests/diff_fixed && vendor/bin/phpcbf tests/diff_fixed; diff -u tests/diff_fixed tests/fixed; if [ $? -ne 0 ]; then exit 1; else rm -rf tests/diff_fixed; fi;
  ;;
  exec) #(exec) Execute a command within the php-cli container. Useful for debugging.
    docker run --rm -v $(pwd):/app -w /app php:7.4-cli ${@:2};
  ;;
  *)
    echo "Usage:";
    grep -E "^[^)]+) #.*$" dev.sh;
  ;;
esac
