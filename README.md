polifonic/mock
==============

Requirements
------------

* Docker 1.11+
* docker-compose
* Make sure that port 80 is available.
* Setup the following virtual hosts to point to your localhost:
    * a.polifonic.dev
    * b.polifonic.dev
    * c.polifonic.dev
    * custom.domain.dev
    * none.polifonic.dev
    * www.polifonic.dev
    * admin.polifonic.dev
    * polifonic.dev

Build
-----

```
make build
```

Run
---

```
make run
```

Stop
----

```
make stop
```

Usage
-----

Open the following links in your browser:

### polifonic/www app

* http://www.polifonic.dev:
* http://polifonic.dev

### polifonic/admin app

* http://admin.polifonic.dev

### wikis

* http://a.polifonic.dev
* http://b.polifonic.dev
* http://c.polifonic.dev

### custom domain

* http://custom.domain.dev (same as http://c.polifonic.dev)

### Invalid wiki

* http://none.polifonic.dev (should redirect to http://www.polifonic.dev)

