deps:
	pip install -r requirements.txt;\
	pip install -r test_requirements.txt

lint:
	flake8 hello_world test

run:
	python main.py

test:
	PYTHONPATH=. py.test --verbose -s

.PHONY: deps lint run test
