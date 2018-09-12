<div align="center">
    <img src="https://scontent.fplu9-1.fna.fbcdn.net/v/t1.0-9/397258_438046579586077_1008515949_n.png?_nc_cat=0&_nc_eui2=v1%3AAeGobJoJorq0jfHTKbuT50JJJEwUDc98iK9C3ey64XysJLDiGMbXPaRq0WhMC4y6h3bQdM2av_FDB5t_Xxs3knweQ7E3NifU22XAGl5LRrQ30w&oh=5bda00398f34cd731818cdb2fe29f7d9&oe=5B315876" style="max-width:100%;height: 90px;">
</div>
</br>
<p align="center">
    <img src="https://cloudinary-a.akamaihd.net/bountysource/image/upload/d_noaoqqwxegvmulwus0un.png,c_pad,w_200,h_200,b_white/oaypndxahpn8vl9tmj0q.jpg">
</p>

## Instalação

### Requisitos
* Docker
* Docker composer

### Configuração do Ambiente
* Clone o projeto para a pasta de sua escolha.
* Acesse a pasta do projeto. Faça uma copia do arquivo `exemple.docker-compose.yml` e renomei-a para `docker-compose.yml`.

### Configuração de environment
* Faça uma copia do arquivo de enviromente de exemplo `.env.example` e renomei-o para .env

### Intalando dependências
* Acesse a pasta do projeto pelo `terminal` e execute o seguinte comando:
```bash
composer update
```
### Gerando a chave do projeto Laravel
* Acesse a pasta do projeto pelo `terminal` e execute o seguinte comando:
```bash
php artisan key:generate
```
### Permissão para pasta storage
* Acesse a pasta do projeto pelo `terminal` e execute o seguinte comando:
```bash
sudo chown 1000:82 -R storage/
```
### Iniciando Serviços
* Acesse a pasta do projeto pelo `terminal` e execute o seguinte comando:
```bash
make run
```
<br>
<br>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Pulse Storm](http://www.pulsestorm.net/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
