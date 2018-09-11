# Taller GraphQL

# Instalación

```bash
git clone git@github.com:laravel-nicaragua/GraphQl-api.git
cd GraphQl-api
php artisan migrate
```

Para poder realizar pruebas necesitarás crear un usuario en tu base de datos. Esto puedes hacerlo usando tu gestor o laravel tinker.

Para iniciar un servidor local puedes ejecutar el siguiente comando.

```bash
php artisan serve
```

Para hacer pruebas puedes usar [GraphQL Playground](https://github.com/prisma/graphql-playground)

En la sección `URL ENDPOINT` tienes que agregar la siguiente url `http://127.0.0.1:8000/graphql`

En el archivo [query.graphql](query.graphql) podras encontrar queries y mutaciónes de ejemplo.

*Links*

- [Lighthouse](https://lighthouse-php.netlify.com/)
- [GraphQL Playground](https://github.com/prisma/graphql-playground)