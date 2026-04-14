Como subir el proyecto a railway

1-. Tener una cuenta en raiway que no haya usado railway para que sea gratuito, o bien pagar lo que cueste
2-. Importar el proyecto desde github
3-. Crear una BD de MySQL en railway
4-. Configuracion de la BD en railway
    4.1-.En las variables de entorno para la bd de railway poner:
        4.1.1-MYSQL_DATABASE
        4.1.2-MYSQL_PUBLIC_URL
        4.1.3-MYSQL_ROOT_PASSWORD
        4.1.4-MYSQL_URL
        4.1.5-MYSQLDATABASE
        4.1.1-.MYSQLHOST
        4.1.2-.MYSQPASSWORD
        4.1.3-.MYSQLPORT
        4.1.4-.MYSQLUSER
5-. Configurar el proyecto en railway (el repo)
    5.1-. COnfigurar variables de entorno
        5.1.1-  MYSQLDATABASE="${{MySQL.MYSQLDATABASE}}"
                MYSQLHOST="${{MySQL.MYSQLHOST}}}}"
                MYSQLPASSWORD="${{MySQL.MYSQLPASSWORD}}}}"
                MYSQLPORT="${{MySQL.MYSQLPORT}}}}"
                PGPASSWORD="kftfvgn58v28vuz37saiuexbt8qqcpqs"
    5.2-. En la pestaña de settings de railway poner:
        5.2.1-En Networking, generar un dominio
        3.2.2-En Deploy, gnerar un comando propio y poner:
            3.2.2.1-php -S 0.0.0.0:$PORT
    