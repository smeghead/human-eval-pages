# human-eval-pages

This tool displays the Human Eval (https://github.com/openai/human-eval) questions—used for LLM benchmarking—on a single page for human review.

## 1. generate markdown

```bash
vendor/bin/phel run src/main.phel > data/HumanEval.md
```

## 2. convert to html

```bash
pandoc data/HumanEval.md -s --metadata title='Human Eval' --highlight-style=tango -o docs/index.html 
```

## 3. GitHub Pages

[Human Eval](https://smeghead.github.io/human-eval-pages/)

## Development

```bash

docker compose build
docker compose run --rm php_cli bash
```
