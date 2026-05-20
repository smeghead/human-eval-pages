# human-eval-pages


## 1. generate markdown

```bash
vendor/bin/phel run src/main.phel > data/HumanEval.md
```

## 2. convert to html

```bash
pandoc data/HumanEval.md -s --metadata title='Human Eval' --highlight-style=tango -o docs/index.html 
```

## Development

```bash

docker compose build
docker compose run --rm php_cli bash
```
