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