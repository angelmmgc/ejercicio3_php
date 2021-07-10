# ejercicio3_php
ejercicio tres tareas daw

# texto
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent porta<BR>
dignissim quam, sed rhoncus ligula volutpat id. Nulla quam libero, fermentum<BR> 
a luctus ut, volutpat eget mi. Etiam quis nisl metus. Curabitur commodo ex<BR>
eu nisi posuere volutpat. Maecenas sem nibh, sagittis sed euismod ut, hendrerit<BR> 
eget quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus<BR> 
suscipit pharetra metus quis porttitor. Suspendisse efficitur, dui in porta<BR> 
interdum, lectus nunc luctus massa, pellentesque tincidunt metus felis vel mi.<BR> 
Vestibulum et ligula in ex dapibus semper eget sed quam. Nunc pretium non nibh<BR> 
id porta. Nullam dapibus ante faucibus dolor elementum, rutrum faucibus odio<BR> 
lobortis. Nam mattis tortor tempus, dapibus nulla at, posuere quam. Fusce nec<BR> 
ullamcorper libero.<BR>

El objetivo de este ejercicio es:

    Poner en uso de los bucles.
    Mezclar HTML y CSS en el script PHP.
    Procesar texto.
    Usar variables que contengan texto extenso.

Parar realizar este ejercicio debes tener en cuenta lo siguiente:

    El texto se almacenará en una variable usando heredoc o nowdoc.
    Tu script deberá aceptar un parámetro tipo GET llamado v. Con respecto al valor de dicho parámetro se pueden dar dos situaciones:
        v no está presente, o contiene algo diferente a un único carácter. En esta situación se considera como carácter a marcar la letra 'a'.
        v contiene un único carácter. En esta situación, se marcarán todas las apariciones de dicho carácter en el texto.
    Para procesar el texto deberás recorrerlo carácter a carácter usando un bucle while obligatoriamente. Recuerda que un texto en PHP puedes 
    tratarlo como si fuera un array indexado. Para saber la longitud del texto puedes usar el método count o el método strlen.
    Tu script deberá marcar las apariciones del carácter tanto en mayúscula como en minúscula, sin diferenciarlas. Para ello tendrás que usar
    métodos como strtolower.
    Al principio del archivo se debe mostrar el nombre del script. Usa el array $_SERVER para obtener dicha información.

