# Шаблон для разработки на битриксе

## Установка

1. Распаковать в папку проекта
2. Загрузить на сервер в папку /local
3. `cd templates/dev-tpl/`
4. `npm i`, дождаться пока установятся все пакеты
5. Настроить отправку изменений на сервер
6. Указать юзернейм и пароль для отправки почты
7. `npm run dev`

## Фронтенд

Исходники собираются через webpack, настроена поддержка sass и typescript. Также работают скрипты для сборки svg спрайтов и оптимизации изображений, изображения ложить в src/images. В svg иконках удаляются все цвета, кроме файлов вида static-\*.svg. Для png,jpeg еще создается webp вариант.

Основной стек - [htmx](https://htmx.org/docs/) и [alpine.js](https://alpinejs.dev/start-here).

## Модуль placestart.settings

- В файле options.php описаны опции модуля, которые задаются в админке: Настройки -> Настройки продукта -> Настройки модулей -> Настройки сайта. По умолчанию в опциях есть контактные данные.
- В сборке используется compser. Установленные пакеты - phpmailer, valitron для валидации и шаблонизатор plates
- В классе `Placestart\Utils` есть множество полезных функций, в том числе и для получения опций модуля - `getSiteOption` и `getContacts`

## Отправка изменений на сервер

Установить [Расширение для VS Code](https://marketplace.visualstudio.com/items?itemName=Natizyskunk.sftp) и создать конфиг в папке .vscode, указав юзер и пароль:

```json
{
	"name": "гк-имт.рф",
	"host": "gk-imt.rf.dev.place-start.ru",
	"protocol": "ftp",
	"port": 21,
	"username": "",
	"password": "",
	"remotePath": "/www/xn----etbqgm0b.xn--p1ai/local",
	"useTempFile": false,
	"openSsh": false,
	"watcher": {
		"files": "*_/_",
		"autoUpload": true,
		"autoDelete": true
	},
	"ignore": [".vscode", ".git", ".DS_Store", "node_modules"]
}
```

На сервер отправляется содержимое папки /local. Весь свой код хранить в ней, контент в других папках.

## Отправка почты

В файле php_interface/init.php объявлена функция `custom_mail`, она вызывается битриксом в момент отправки почты. Функция нужна для отправки почты через SMTP, поскольку битрикс сам этого не может. Письма отправляются путем создания почтовых событий - [Event::send](https://dev.1c-bitrix.ru/api_d7/bitrix/main/mail/event/send.php). В функции нужно указать юзернейм и пароль от почтового сервера, полученные при создании хоста.
