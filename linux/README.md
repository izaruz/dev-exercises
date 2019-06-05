# Ejercicios LINUX

1. Determine cual es la version del kernel que utiliza su sistema.

    ~~~
    $ uname -r
    2.11.2(0.329/5/3)
    ~~~

> -r indica que se desea conocer el release

___

2. Coloque el 'host name' de máquina.

    ~~~
    $ hostname
    Devlaptop
    ~~~

___

3. Liste cada uno de los usuarios logueados en su sistema

    ~~~
    $ whoami
    gesdev
    ~~~

___

4. Determine cual es el tamaño ( en Megas ) que ocupa su 'home directory'.

    ~~~
    $ df -hm .
    Filesystem     1M-blocks   Used Available Use% Mounted on
    C:                462755 199506    263250  44% /c
    ~~~

> m indica que se desea conocer el tamaño en MEGAS

___

5. Determine cuanto tiempo se tarda ejecuciónion del punto anterior.

    ~~~
    $ time df -hm .
    real    0m0.180s
    user    0m0.015s
    sys     0m0.061s
    ~~~

___

6. Cree un directorio llamado psets1 dentro de su home directory.

    ~~~
    $ mkdir psets1
    ~~~

___

7. Ingrese al directorio y escriba “pwd”, coloque el resultado obtenido aca.

    ~~~
    $ pwd
    /c/Users/gesdev/Desktop/exercises/linux/psets1
    ~~~

8. Cree dentro de el directorio psets1 un archivo llamado listadotmp.txt que contenga un listado de los archivos que se encuentran en el /tmp de su máquina (Esto debe de ser creado en 1 sola linea de comando).

    ~~~
    $ touch listadotmp.txt
    ~~~

9. Cuente cuantas lineas contiene el archivo creado en el punto anterior. ( No abra el archivo y cuente las líneas con el dedo pegado a la pantalla :), hay una forma más fácil de contar líneas dentro de un archivo).

    ~~~ 
    $ ws -l listadotemp.txt
    0 listadotemp.txt
    ~~~

___

10. Imprima en pantalla el archivo de configuracion de interfaces de red que posee su maquina.

    ~~~
    $ ip link show
    ~~~

___

11. Cree un archivo dentro del directorio 'psets1' que contenga los repositorios utilizados por aptitude. ( Este archivo debe de llamarse 'aptitude.conf' ).

    ~~~
    $ touch aptitude.conf
    ~~~

___

12. Copie el archivo creado anteriormente a /tmp/

    ~~~
    $ cp aptitude.conf /tmp/
    ~~~

___

13. Cambie el owner del archivo aptitude.conf que se encuentra en /tmp/ ( el owner ahora deberá ser el usuario root ).

    ~~~
    $ chown root:197121 aptitude.conf
    ~~~

___

14. Cree un archivo con extension .ges

    ~~~
    $ touch file.ges
    ~~~

___

15. Cambie los permisos del archivo con extension .ges de manera que el dueño del archivo ( usted ) pueda tener acceso de lectura, escritura y ejecución, y otros usuarios permiso de lectura.

    ~~~
    $ chmod 744 file.ges
    ~~~

___

16. Escriba 'ls -al', coloque el resultado obtenido aca:

    ~~~
    $ ls -al
    total 0
    drwxr-xr-x 1 gesdev 197121 0 Jun  4 17:01 ./
    drwxr-xr-x 1 gesdev 197121 0 Jun  4 16:38 ../
    -rw-r--r-- 1 gesdev 197121 0 Jun  4 16:53 aptirude.conf
    -rwxr-r--r-- 1 gesdev 197121 0 Jun  4 17:01 file.ges
    -rw-r--r-- 1 gesdev 197121 0 Jun  4 16:40 listadotmp.txt
    ~~~

___

17. Cree un archivo que contenga listado, todos los archivos que se encuentran dentro del directorio /tmp de su máquina.

    ~~~
    $ ls -l > ~/Desktop/exercises/linux/psets1/list.txt
    ~~~

___

18. Identifique cual es el ID del proceso que tiene asignado su terminal

    ~~~
    $ ps -e
     PID    PPID    PGID     WINPID   TTY         UID    STIME COMMAND
     7344    2028    7344       4984  pty0      197609 17:48:11 /usr/bin/ps
     2028    5764    2028       5372  pty0      197609 13:45:33 /usr/bin/bash
     5764       1    5764       5764  ?         197609 13:45:33 /usr/bin/mintty
    ~~~

> La terminal usada es mintty, el PID es 5764

___

19. Determine si el servicio de postgresql esta corriendo en su máquina. Escriba cual es el ID del proceso

    ~~~
    $ ps ax | grep postgresql
    ~~~

> El proceso no se encuentra activo

___

20. Cree un archivo llamado “curr.html” dentro del directorio psets1.

    ~~~
    $ touch curr.html
    ~~~

___

21. Abra su archivo curr.html con EMACS y escriba su currículum en el ( Utilice html ).

    ~~~
    $ emacs curr.html
    ~~~

___

22. Cree un zip llamado curr.zip que contenga el archivo curr.html.

    ~~~
    $ zip curr.zip curr.html
    ~~~

___

23. Cree un tar que contenga todo la carpeta de psets1, nombre a este tar como psets1.tgz.

    ~~~
    $ tar -czvf psets1.tar.gz
    ~~~

> -c crea un nuevo archivo, z comprime el archivo, v verbose output, f indica que utilice el archivo
___

24. Copie el archivo curr.html a su directorio public_html dentro de home.galileo.edu ( Utilice scp para realizar esto).

    ~~~
    $ scp curr.html user@galileo.edu:/home/isaac/www/
    ~~~

___

25. Liste cuales son sus variables de ambiente, con sus respectivos valores.

    ~~~
    $ printenv
    ~~~
