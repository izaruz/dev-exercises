Problem set Tcl

2. ¿Por qué este devolverá un error?
> retorna error porque no hay un valor que se pueda asignar a la variable x

3. ¿ Qué valor devuelve el último “set y” y porque ?
> set y devuelve x que es igual a 5 porque la variable x guarda el ultimo valor asignado

4. Devuelve el valor redondeado del valor de “a” dividido por el valude de b:
> set c [expr $a/$b]

5. Hacer un procedimiento que devuelva un string random de n caracteres. Tip: Listas y Loops

    ~~~
    binary scan A c A
    binary scan z c z
    proc random_char [list length [list min $A] [list max $z]] {
        set range [expr {$max-$min}]

        set txt ""
        for {set i 0} {$i < $length} {incr i} {
            set ch [expr {$min+int(rand()*$range)}]
            append txt [binary format c $ch]
        }
        return $txt
    }
    ~~~

7. Hacer un procedimiento que tome como parámetro un código de país y devuelva el nombre completo de ese país. Tip: Arrays

    ~~~
    proc get_country {code} {
        array set country [list {502} {Guatemala} \
                       {503} {El Salvador} \
                       {504} {Honduras} \
                       {505} {Nicaragua} \
                       {506} {Costa Rica}]
        
        if {[array exist country] == 0} {
            return "Listado de paises no encontrado"
        }

        if {[info exists country($code)]} {
            return $country($code)
        } else {
            return "Codigo invalido"
        }

    }
    ~~~

8. Hacer un procedimiento que devuelva, en una lista, TODAS las ocurrencias de una expresión regular dentro de un string. Tip: La sección de “Pattern Matching” del libro, manipulación de strings y ciclos.

    ~~~
    proc get_match {oracion} {
        set matches [list ]
        set words [split $oracion] 
        for {set x 0} {$x<[llength $words]} {incr x} {
            set singlew [lindex $words $x]
            if {[regexp a(.*)a $singlew match]} {
                lappend matches $singlew
            }
        }
        return $matches
    }
    ~~~

9. Un procedimiento que reciba 2 vectores y retorne una lista  donde el primer elemento es la suma de los vectores y el segundo es el producto punto

    ~~~
    proc analyze_vector {vector1 vector2} {
        set result [list ]
        set suma [list ]
        set producto [list ]

        for {set x 0} {$x<[llength $vector1]} {incr x} {
            set val1 [lindex $vector1 $x]
            set val2 [lindex $vector2 $x]

            set total [expr $val1 + $val2]
            lappend suma $total
        }

        for {set y 0} {$y<[llength $vector1]} {incr y} {
            set val1 [lindex $vector1 $y]
            set val2 [lindex $vector2 $y]

            set total [expr $val1 * $val2]
            lappend producto $total
        }

        lappend result $suma
        lappend result $producto
        return $result
    }
    ~~~

10. Un procedimiento que lea palabras de un archivo de texto y las escriba ordenadas en otro archivo de texto, debe recibir un parámetro opcional que indique si se desea orden ascendente o descendente (asc, desc), por default el orden es ascendente.

    ~~~
    proc read_file {filename {order "desc"}} {
        set file [open test.txt]
        set outputFile [open test2.txt w]

        set input [read $file]
        set words [split $input]
        set default "desc"

        if {$order == $default} {
            lsort -decreasing $words
        } else {
            lsort $words
        }

        puts $outputFile $words
        
        close $file
        close $outputFile

        return $words
    }
    ~~~

11. Un procedimiento que reciba un número y devuelva su factorial.

    ~~~
    proc factorial {number} {
        set resultado 1

        if {$number == 0} {
            return 1
        }

        if {$number == 1} {
            return 1
        }

        for {set y 1} {$y<=$number} {incr y} {
            set resultado [expr $resultado * $y]
        }

        return $resultado
    }
    ~~~

12. Un procedimiento que reciba un número N y muestre la secuencia de Fibonacci hasta la posición N, además la secuencia debe de almacenarse en un array en el scope superior de la función (i.e. array(0) = 1, array(1) = 1, array(2) = 2, ...).

    ~~~
    proc fibonacci {number} {
        set a 1
        set b 0

        for {set y 1} {$y<=$number} {incr y} {
            set suma [expr $a + $b]
            set a $b
            set b $suma
        }

        return $suma
    }
    ~~~

13. Un procedimiento que reciba un string y retorne 1 si el string cumple con el formato de fecha "dd/mm/yyyy", debe retornar 0 en caso contrario.

    ~~~
    proc validate_date {date {date_format "%d/%m/%Y"}} {
        return [string equal [clock format [clock scan $date  -format $date_format] -format $date_format] $date]
    }
    ~~~

14. Un procedimiento que reciba un string y retorne la cantidad de cifras numéricas que posee el string (e.g. "_123abcd456efghi7j8" posee 4 cifras").

    ~~~
    proc get_cifras {cadena} {
        set data [split $cadena {}]
        set numero [list ]
        set temp {}

        for {set y 0} {$y<=[llength $data]} {incr y} {
            set c [lindex $data $y]

            if { [ regexp {^([0-9]+)$} $c ] } {
                set temp $temp$c
            } else {
                if { [ regexp {^([0-9]+)$} $temp ] } {
                    lappend numero $temp
                }
                set temp {}
            }
            
        }

        return [llength $numero]
    }
    ~~~

15. Un procedimiento que reciba una serie de números separados por coma (,) y devuelva un string con el factorial de cada uno separado por punto y coma (;) (e.g. el resultado para "1,4" es "1;24"). Utilice la función implementada en el ejercicio 3

    ~~~
    proc factorial_m {cadena} {
        set number [split $cadena ","]
        set resultado 1
        set respuesta ""
        set sep ";"

        for {set y 0} {$y<[llength $number]} {incr y} {
            set n [lindex $number $y]

            if {$n == 0} {
                set resultado $resultado$sep$n
            }

            if {$n == 1} {
                set resultado $resultado$sep$n
            }

            for {set z 1} {$z<=$n} {incr z} {
                set resultado [expr $resultado * $z]
            }

            if {$y == 0} {
                set respuesta $resultado
            } else {
                set respuesta $respuesta$sep$resultado
            }
            set resultado 1
        }

        return $respuesta
    }
    ~~~

16. Un procedimiento que reciba un string y censure las marcas registradas "Pepsi", "Ferrari", "Oracle" con una secuencia de n asteriscos, donde n es la longitud de la palabra censurada. (e.g. "Me gusta tomar Pepsi para mantenerme despierto mientras manejo mi Ferrari." devuelve "Me gusta tomar ***** para mantenerme despierto mientras manejo mi *******."

    ~~~
    proc censura {cadena} {
        set words [split $cadena]
        set typo "*"

        set censuradas {pepsi ferrari oracle}

        for {set y 0} {$y<[llength $words]} {incr y} {
            set word [lindex $words $y]
            set word [string tolower $word]

            for {set x 0} {$x<[llength $censuradas]} {incr x} {
                set censurada [lindex $censuradas $x]

                if {$word == $censurada} {
                    set l [string length $word]
                    set temp ""
                    for {set z 0} {$z<$l} {incr z} {
                        set temp $temp$typo
                    }
                    set words [lreplace $words $y $y $temp]
                }
            }
        }

        set response [join $words]
        return $response
    }
    ~~~

17. Un procedimiento que obtenga el listado de archivos en el directorio actual y muestre las diferentes extensiones de los archivos y la cantidad de archivos por extensión

    ~~~
    proc file_scan {} {
        set extensiones [list ]
        set response [list ]

        set files [list]
        foreach dir [glob -type f *] {        
            lappend files {*}$dir
        }

        for {set y 0} {$y<[llength $files]} {incr y} {
            lappend extensiones [file extension [lindex $files $y]]
        }

        set counters {}
        foreach item $extensiones {
            dict incr counters $item
        }
        dict for {item count} $counters {
            lappend response "${item}: $count"
        }

        return $response
    }
    ~~~

18. ¿muy fácil? agregue una columna Tamaño que muestre la suma del tamaño de los archivos.

    ~~~
    proc file_scan_pro {} {
        set extensiones [list ]
        set sizes [list ]
        set response [list ]

        set files [list]
        foreach dir [glob -type f *] {        
            lappend files {*}$dir
        }

        for {set y 0} {$y<[llength $files]} {incr y} {
            lappend extensiones [file extension [lindex $files $y]]
            lappend sizes [file size [lindex $files $y]]
        }

        set counters {}
        foreach item $extensiones {
            dict incr counters $item
        }
        dict for {item count} $counters {
            lappend response "${item}: $count"
        }

        return $sizes
    }
    ~~~


19. Un procedimiento que retorne una lista conteniendo la jerarquía de directorios del directorio actual. Por cada directorio se agrega la pareja (nombre, contenido)

    ~~~
    proc get_dir {} {
        set cont 0
        set alp {a b c d e f g h i j k l m n o p q r s t u v w x y z}
        set folders [glob -type d *]

        foreach folder $folders {
            set name [lindex $alp $cont]
            dict set j $name {}
            incr cont
        }

        return $j
    }
    ~~~
    set sub [glob -type d */*/*]
    if {[llength $sub] > 0} {
        puts "el subfolder"
    }
