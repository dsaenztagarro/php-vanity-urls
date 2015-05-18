# php-zf2-vanity-urls

## Urls defined

```
# GET /cat1/

# renders => Section page

# GET /cat1/news/

# renders => Section news page

# GET /cat1/cat2/

# renders => Subsection page

# GET /cat1/cat2/news/

# renders => Subsection news page

# GET /tag1/

# renders => Tag page
```

## Running Tests

```
cd module/Frontend/test/
phpunit
```

## Next steps

- [ ] Add a Zend Logger wrapper
- [ ] Inject service into routes
