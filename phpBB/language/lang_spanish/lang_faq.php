<?php
/***************************************************************************
 *                          lang_faq.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   
 *   traducci&oacute;n al espa&ntilde;ol : Christian Gastrell (traducci&oacute;n y versión argentina)
 *                           Juan Manuel Muñoz (corrector y versión española)
 *
 *   $Id: lang_faq.php,v 1.4.2.3 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS:
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/
 
// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\"
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//
 
  
$faq[] = array("--","Problemas para Registrarse y Conectarse");
$faq[] = array("&iquest;Por qu&eacute; no puedo conectarme?", "Se ha registrado? Debe registrarse para poder conectarse. &iquest;Ha sido Ud. inhibido del foro? (Se le mostrar&aacute; un mensaje si as&iacute; es.) De ser as&iacute;, debe contactar con el administrador para averiguar por qu&eacute;. Si se ha registrado y no ha sido inhibido y a&uacute;n as&iacute; no puede conectarse entonces vuelva a verificar su nombre de usuario y contrase&ntilde;a. Generalmente &eacute;ste es el problema; si no, contacte con el administrador -- puede llegar a haber una configuraci&oacute;n incorrecta del foro.");
$faq[] = array("&iquest;Por qu&eacute; necesito registrarme?", "No est&aacute; obligado a hacerlo -- depende de los administradores y moderadores si necesita registrarse para crear mensajes nuevos o no. Sin embargo estar registrado le da muchas ventajas que como usuario invitado no difrutar&iacute;a, como tener su gr&aacute;fico personalizado (avatar), Mensajer&iacute;a Privada, subscripci&oacute;n a grupos de usuarios, etc... S&oacute;lo le tomar&aacute; unos segundos y es muy recomendable hacerlo.");
$faq[] = array("&iquest;Por qu&eacute; me desconecta autom&aacute;ticamente?", "Si no activa la opci&oacute;n <i>Conectarme autom&aacute;ticamente</i>, el foro s&oacute;lo lo mantendr&aacute; conectado por un determinado tiempo. Esto previene el uso de su cuenta por otras personas. Para mantenerse conectado, active la opci&oacute;n al momento de conectarse. No se recomienda hacer esto si Ud. accede desde un ordenador compartido, por ej. cyber-caf&eacute;, trabajo, universidad, etc.");
$faq[] = array("&iquest;C&oacute;mo evito que mi nombre de usuario aparezca en las listas de usuarios conectados?", "En su perfil encontrar&aacute; una opci&oacute;n de <i>Ocultar mi estado de conexi&oacute;n</i>; si activa esta opci&oacute;n s&oacute;lo podr&aacute; ser visto por administradores y Ud. mismo. Se le contar&aacute; como usuario oculto.");
$faq[] = array("&iexcl;Perd&iacute; mi contrase&ntilde;a!", "&iexcl;No se altere! Si bien su contrase&ntilde;a no se le puede enviar puede ser cambiada. Para esto vaya a Conectarse y pulse en <u>&iexcl;He olvidado mi contrase&ntilde;a!</u>. Siga las instrucciones y podr&aacute; volver a conectarse casi de inmediato.");
$faq[] = array("&iexcl;Me registr&eacute; pero no puedo conectarme!", "Primero verifique que est&aacute; ingresando el nombre de usuario y contrase&ntilde;a correctos. Si est&aacute;n bien entonces verifique estas posibilidades: si est&aacute; habilitado el soporte para COPPA y Ud. puls&oacute; en <u>tengo menos de 13 a&ntilde;os</u> mientras se registraba entonces deber&aacute; seguir las instrucciones que recibi&oacute;. Si este no es el caso, entonces su cuenta debe necesitar activaci&oacute;n. Revise su correo y vea las instrucciones de activaci&oacute;n, algunos foros dejan que sus usuarios activen sus cuentas y otros requieren la activaci&oacute;n por parte del administrador. Si no recibi&oacute; un correo, verifique que su correo sea correcto. Una de las razones por las que se pide activaci&oacute;n es para evitar que usuarios an&oacute;nimos abusen del foro. Si ninguna de estas descripciones concuerda con su problema, contacte con el administrador del foro.");
$faq[] = array("&iexcl;Me registr&eacute; hace tiempo pero ya no puedo conectarme!", "Lo m&aacute;s probable es que: haya ingresado un nombre de usuario o contrase&ntilde;a incorrectos (verifique su correo, cuando se registr&oacute; se le envi&oacute; un mensaje con su nombre de usuario y contrase&ntilde;a) o el administrador ha borrado su cuenta por alguna raz&oacute;n. Es normal que los foros, peri&oacute;dicamente, \"limpien\" sus bases de datos de usuarios, si Ud. pas&oacute; mucho tiempo sin escribir mensajes nuevos, puede que &eacute;ste sea el caso. Intente registr&aacute;ndose de nuevo.");


$faq[] = array("--","Preferencias y configuraci&oacute;n de Usuarios");
$faq[] = array("&iquest;C&oacute;mo cambio mi configuraci&oacute;n?", "Todos sus datos y configuraciones (si est&aacute; registrado) est&aacute;n archivados en nuestra base de datos. Para modificarlos pulse en el enlace de <u>Perfil</u>, generalmente se encuentra en la parte de arriba de cada p&aacute;gina.");
$faq[] = array("&iexcl;Los horarios son incorrectos!", "Las horas son, casi siempre, correctas, lo que puede estar sucediendo es que est&eacute; viendo las horas correspondientes a otra zona horaria. Si este es el caso, entre en su perfil y defina su zona horaria de acuerdo a su ubicaci&oacute;n (ej. Londres, Paris, New York, Sydney, etc.) Cambiar la zona horaria, como la mayor&iacute;a de las configuraciones, es s&oacute;lo para usuarios registrados. Cambiando esto las horas deber&iacute;an aparecer de acuerdo a su zona y tiempo. Si no se ha registrado, este es un buen momento para hacerlo.");
$faq[] = array("&iexcl;Cambi&eacute; la zona horaria y las horas siguen siendo incorrectas!", "Si est&aacute; seguro de que la zona horaria es correcta es posible que esto se deba a los horarios de verano implementados por algunos paises. El foro no est&aacute; preparado para trabajar con estos cambios.");
$faq[] = array("&iexcl;Mi idioma no est&aacute; en la lista!", "&Eacute;sto se puede deber a que el administrador no ha instalado el paquete de su lenguaje para el foro o nadie ha creado una traducci&oacute;n a su idioma. De ser as&iacute;, si&eacute;ntase total libertad para hacer una traducci&oacute;n (miles de personas se lo agradecer&aacute;n), la informaci&oacute;n la encontr&aacute; en el sitio Web del Grupo phpBB (Pulse en el enlace que se encuentra al final de la p&aacute;gina)");
$faq[] = array("&iquest;C&oacute;mo muestro una imagen debajo de mi nombre de usuario?", "Hay dos tipos de im&aacute;genes debajo de su nombre de usuario, la primera corresponde al Rango, que est&aacute; asociada con el n&uacute;mero de mensajes que ha ingresado en el foro (generalmente son estrellas o bloques), la segunda es el AVATAR, que es un gr&aacute;fico generalmente &uacute;nico y personal. El administrador decide si se pueden usar o no. Si es posible usarlos puede introducirlo en su perfil. En caso de que no exista esa opci&oacute;n, contacte con el administrador y pida que sea activada esa opci&oacute;n (seguramente sea un administrador bueno).");
$faq[] = array("&iquest;C&oacute;mo cambio mi rango?", "Por lo general no puede cambiar su Rango ya que &eacute;ste es asociado directamente con el n&uacute;mero de mensajes ingresados o se utilizan para identificar a ciertos usuarios (administrador, moderador o Rangos especiales). Por favor, no abuse del foro creando mensajes innecesarios s&oacute;lo para incrementar su Rango, no hay ning&uacute;n beneficio adicional por tener Rangos.");
$faq[] = array("Cuando pulso en el enlace para enviar un correo a un usuario me pide nombre de usuario y contrase&ntilde;a.", "Disculpe, pero s&oacute;lo los usuarios registrados pueden enviar correos a trav&eacute;s del foro (si el administrador ha habilitado esta opci&oacute;n). Esto es para evitar SPAM o mensajes maliciosos de usuarios an&oacute;nimos.");


$faq[] = array("--","Problemas con los mensajes");
$faq[] = array("&iquest;C&oacute;mo creo un mensaje en un Tema o en un foro?", "F&aacute;cil -- pulse en el bot&oacute;n correspondiente cuando est&eacute; en un foro o en un tema. Puede que necesite registrarse para poder crear mensajes. Los permisos que tiene en cada lugar del foro est&aacute;n listados en la parte inferior de cada p&aacute;gina (<i> Puede crear mensajes. Puede hacer encuestas..</i>)");
$faq[] = array("&iquest;C&oacute;mo modifico o borro un mensaje?", "A menos que sea administrador o moderador del foro, s&oacute;lo puede borrar o modificar los mensajes que haya ingresado Ud. mismo. Puede modificar un mensaje pulsando en <i>Editar</i>. Si alguien ya ha respondido a su mensaje, encontrar&aacute; un peque&ntilde;o texto en el suyo diciendo que ha sido modificado y las veces que lo ha hecho. No aparece si fue un moderador o el administrador el que lo modific&oacute; (la mayoria de las veces se deja un mensaje aclaratorio).");
$faq[] = array("&iquest;C&oacute;mo adoso mi firma a mis mensajes?", "Para adosar una firma en sus mensajes primero tiene que crear una firma personalizada. Esto se hace modificando su perfil. Una vez creada puede activar la opci&oacute;n <i>Agregar firma</i> cuando ingrese un mensaje. Tambi&eacute;n puede activar la opci&oacute;n para que siempre se agregue su firma a los mensajes (esta opci&oacute;n est&aacute; en su perfil) y puede evitar que se adose su firma a alg&uacute;n mensaje en particular al crearlo.");
$faq[] = array("&iquest;C&oacute;mo creo una encuesta?", "Crear una encuesta es f&aacute;cil -- cuando inicia un nuevo tema (o modifica el primer mensaje de un tema) ver&aacute; la opci&oacute;n <i>Crear una encuesta</i> en la parte inferior del formulario de mensaje. Si no ve esta opci&oacute;n probablemente las encuestas est&eacute;n desactivadas o no tiene permisos para crearlas. Debe introducir un t&iacute;tulo para la encuesta y por lo menos 2 opciones de votaci&oacute;n -- para agregar una opci&oacute;n escriba una y pulse en <i>Agregar opci&oacute;n</i>. Tambi&eacute;n puede limitar la encuesta por tiempo (0 [cero] para que no tenga l&iacute;mite de tiempo). Tambi&eacute;n habr&aacute; un l&iacute;mite de opciones a agregar que es establecida por defecto por el administrador.");
$faq[] = array("&iquest;C&oacute;mo modifico o borro una encuesta?", "Al igual que con los mensajes, s&oacute;lo puede modificar o borrar una encuesta generada por Ud. (o siendo administrador o moderador). Para modificar una encuesta, pulse en el primer mensaje de un tema, que siempre es el que tiene la encuesta asociada. Si no se han realizado votaciones, se pueden modificar las opciones o borrarlas. Sin embargo, si ya existen votos, s&oacute;lo los administradores y moderadores pueden modificar la encuesta. Esto es para prevenir la falsificaci&oacute;n de resultados de una encuesta por medio de la edici&oacute;n de la misma a mitad de camino.");
$faq[] = array("&iquest;Por qu&eacute; no puedo acceder a ciertos Foros?", "Algunos foros est&aacute;n limitados a ciertos usuarios o grupos de usuarios. Para verlos, crear mensajes, modificar, etc. necesita ciertas autorizaciones que s&oacute;lo te puede dar un moderador o administrador del foro.");
$faq[] = array("&iquest;Por qu&eacute; no puedo votar en encuestas?", "S&oacute;lo usuarios registrados pueden votar en las encuestas (para prevenir resultados falseados). Si se ha registrado pero no puede votar, es posible que no tenga autorizaci&oacute;n para votar en esa encuesta.");


$faq[] = array("--","Formatos y tipos de temas");
$faq[] = array("&iquest;Qu&eacute; es BBCode?", "BBCode es una implementaci&oacute;n especial del HTML. Depende del administrador si se puede usar o no en los mensajes. Tambi&eacute;n puede desactivarlo desde la casilla de verificaci&oacute;n en el formulario de ingreso de mensaje. BBCode es muy similar al HTML: las etiquetas (tags) se escriben entre corchetes [ y ] en lugar de entre signos mayor y menor &lt; and &gt; y ofrece un buen control sobre qu&eacute; y c&oacute;mo se muestran los mensajes. Para m&aacute;s informaci&oacute;n sobre BBCode vea la gu&iacute;a a la que puede acceder desde el formulario de ingreso de mensajes.");
$faq[] = array("&iquest;Puedo usar HTML?", "Depende de si el administrador lo permite y de ser as&iacute;, qu&eacute; etiquetas est&aacute;n permitidas. Esto es una medida de seguridad para mantener la integridad del foro. De estar habilitado, Ud. puede deshabilitarlo cada vez que crea un mensaje.");
$faq[] = array("&iquest;Qu&eacute; son los emoticonos o Smileys?", "Smileys, o emoticons, son peque&ntilde;os gr&aacute;ficos que pueden ser usados para expresar emociones. Aparecen introduciendo un peque&ntilde;o c&oacute;digo, por ejemplo:  :) significa feliz, :( significa triste. La lista completa de emoticonos (smileys) puede ser desplegada cuando se est&aacute; escribiendo un mensaje. Trate de no abusar de ellos, si un administrador considera que su mensaje se ha vuelto ilegible por este motivo, puede decidir borrarlo o privarlo del uso de los mismos.");
$faq[] = array("&iquest;Puedo colocar im&aacute;genes en los mensajes?", "Las im&aacute;genes pueden ser adheridas en sus mensajes. Sin embargo, de momento no se cuenta con una herramienta que permita subir im&aacute;genes al foro. Por ende, Ud. debe hacer un enlace URL a una imagen que quiere que se muestre, por ej. http://www.unsitio.com/una_imagen.gif. No puede hacer enlaces a im&aacute;genes que se encuentren en su propio PC (a menos que su PC sea un servidor de WEB con acceso desde internet) ni tampoco a im&aacute;genes que se encuentren tras alg&uacute;n mecanismo de autentificaci&oacute;n (cuentas de Hotmail o Yahoo, sitios protegidos por contrase&ntilde;a, etc.). Para mostrar una imagen use el BBCode [img] o la etiqueta HTML correspondiente (de estar permitido).");
$faq[] = array("&iquest;Qu&eacute; son los Anuncios?", "Los Anuncios usualmente contienen informaci&oacute;n importante que los usuarios deber&iacute;an leer lo antes posible. Los Anuncios aparecen primero en las listas de temas del Foro donde fueron colocados. Si puede o no ingresar anuncios depender&aacute; de los permisos que Ud. posea, los cuales son impuestos por el administrador.");
$faq[] = array("&iquest;Qu&eacute; son los Temas Permanentes?", "Los Temas Permanentes aparecen por debajo de los Anuncios en la vista del Foro y s&oacute;lo en la primera p&aacute;gina. Usualmente son de car&aacute;cter importante o son temas que deben permanecer siempre a la vista. Al igual que con los Anuncios, el administrador decide quien puede ingresar Temas Permanentes y quien no.");
$faq[] = array("&iquest;Qu&eacute; son los Temas Bloqueados?", "Los Temas Bloqueados son puestos de esta manera por el administrador o moderador. No se puede crear mensajes ni respuestas ni votar en encuestas de un Tema Bloqueado. Las encuestas en un Tema Bloqueado son autom&aacute;ticamente finalizadas.");


$faq[] = array("--","Niveles de Usuarios y Grupos");
$faq[] = array("&iquest;Qu&eacute; son los Administradores?", "Los Administradores son gente asignada con el m&aacute;s alto nivel de control sobre el foro entero. Ellos pueden controlar la manera en que funciona el foro en todos sus aspectos, incluyendo permisos, inhibici&oacute;n de usuarios, creaci&oacute;n de grupos y/o moderadores, etc. Tambi&eacute;n, obviamente, tienen capacidad de moderar sobre cualquiera de los foros.");
$faq[] = array("&iquest;Qu&eacute; son los Moderadores?", "Los Moderadores usuarios (o grupos de usuarios) cuyo trabajo es mantener el funcionamiento normal del foro d&iacute;a a d&iacute;a. Tienen el poder de modificar o borrar mensajes, bloquear o desbloquear, mover y separar temas en el foro donde son Moderadores. Por lo general los Moderadores est&aacute;n ah&iacute; para evitar que los usuarios publiquen mensajes que est&eacute;n <i>fuera de tema (off topic)</i> o que se abuse de material ofensivo en el foro. NOTA: <i>Off topic o Fuera de tema</i> significa desviarse del motivo o tema original de la conversaci&oacute;n, es algo muy subjetivo definir si sucede o no y por ende los Moderadores son seleccionados (por lo general) cuidadosamente. Ha de respetarse sus decisiones sobre esta cuesti&oacute;n.");
$faq[] = array("&iquest;Qu&eacute; son Grupos de Usuarios?", "Los Grupos de Usuarios es una de las formas en las que el administrador del foro puede agrupar usuarios. Cada usuario puede pertenecer a varios grupos (esto es distinto en la mayor&iacute;a de los dem&aacute;s sistemas de foros) y cada grupo puede tener distintos permisos y accesos. Esto facilita la tarea del administrador a la hora de suministrar permisos sobre foros privados o para asignar moderadores.");
$faq[] = array("&iquest;C&oacute;mo me uno a un Grupo de Usuarios?", "Para unirse a un Grupo de Usuarios, pulse en el enlace <i>Grupos de Usuarios</i> y podr&aacute; ver todos los Grupos. No todos son de <i>Acceso libre</i> -- algunos est&aacute;n cerrados y otros pueden tener usuarios ocultos. Si el Grupo est&aacute; abierto Ud. puede requerir ser unido al grupo pulsando en el bot&oacute;n apropiado. El moderador del grupo deber&aacute; aprobar su petici&oacute;n; pueden preguntarle porqu&eacute; quiere unirse al grupo. Por favor, no moleste a los moderadores de grupo si rechazan su petici&oacute;n -- tendr&aacute;n sus motivos.");
$faq[] = array("&iquest;C&oacute;mo me convierto en el Moderador de un Grupo de Usuarios?", "Los Grupos de Usuarios son inicialmente creados por el administrador que tambi&eacute;n asigna los moderadores. Si est&aacute; interesado en crear un Grupo entonces deber&iacute;a hablar con el administrador, int&eacute;ntelo dej&aacute;ndole un Mensaje Privado.");


$faq[] = array("--","Mensajer&iacute;a Privada");
$faq[] = array("&iexcl;No puedo enviar Mensajes Privados!", "Hay tres posibles razones: No est&aacute; registrado y/o no se ha conectado, el administrador deshabilit&oacute; el sistema de mensajes privados o el administrador ha deshabilitado la mensajer&iacute;a privada para Ud. Si &eacute;ste es el caso, trate de contactar con el administrador y preg&uacute;ntele el motivo.");
$faq[] = array("&iexcl;Recibo constantemente mensajes privados no deseados!", "En el futuro ser&aacute; agregada la caracter&iacute;stica de ignorar mensajes de una lista de usuarios. Por el momento, si est&aacute; recibiendo mensajes no deseados de uno o m&aacute;s usuarios, informe al administrador -- ellos tienen la autoridad para evitar que alguien env&iacute;e mensajes.");
$faq[] = array("&iexcl;He recibido spam o correo abusivo de alguien de este foro!", "Lamentamos oir eso. El sistema de correo de este foro incluye mecanismos para registrar usuarios que hagan esto. Deber&iacute;a contactar al administrador con una copia del correo que recibi&oacute; y es muy importante que incluya los encabezados del correo (headers). Entonces el administrador podr&aacute; tomar acciones.");

//
// These entries should remain in all languages and for all modifications
//
$faq[] = array("--","Con respecto a phpBB 2");
$faq[] = array("&iquest;Qui&eacute;n hizo este sistema de foros?", "Este software (en su versi&oacute;n sin modificar) esta producido y registrado por <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. Es puesto a disponibilidad bajo Licencia P&uacute;blica General GNU (GNU/GPL) y puede ser libremente distribuido; vea el enlace para m&aacute;s detalles.");
$faq[] = array("&iquest;Por qu&eacute; no est&aacute; X caracter&iacute;stica disponible?", "Este software fue escrito y licenciado por el Grupo phpBB. Si cree que alguna caracter&iacute;stica debe ser agregada entonces, por favor, visite el sitio Web phpbb.com y vea que tiene lo que decir el Grupo phpBB. Por favor no ingrese requerimientos de caracter&iacute;sticas en el foro de phpBB.com, ya que el Grupo usa sourceforge para manejar la programaci&oacute;n de nuevas caracter&iacute;sticas. Por favor, lea los foros y vea cual, se es que alguna, nuestra posici&oacute;n es con respecto a nuevas caracter&iacute;sticas y luego siga los procedimientos ah&iacute; descritos.");
$faq[] = array("&iquest;A qui&eacute;n contacto con respecto a abusos y/o temas legales sobre este sistema de foros?", "Ud. deber&iacute;a contactarse con el administrador de este foro. Si no puede encontrarlo o no puede contactarse con el, deber&iacute;a primero tratar de contactar al moderador del foro y que el le indique a quien contactar. Si aun as&iacute; no obtiene respuesta deber&iacute;a tratar de contactar al due&ntilde;o del dominio (efect&uacute;e una b&uacute;squeda whois) o, si este foro corre sobre un dominio gr&aacute;tis (yahoo, free.fr, f2s.com, etc.), el departamento o administraci&oacute;n de abusos de ese servicio. Por favor, tenga en cuenta que el Grupo phpBB carece de cualquier tipo de control y no puede ser de ninguna manera responsable sobre como, donde o por quien este sistema de foros es usado. No tiene ning&uacute;n sentido contactar al Grupo phpBB en relaci&oacute;n a asuntos legales (difamaci&oacute;n, responsabilidad, deformaci&oacute;n de comentarios, etc.) que no sean con respecto al sitio phpbb.com o la discreci&oacute;n misma del software phpBB. Si Ud. env&iacute;a correo al Grupo phpBB respecto del uso de terceras partes de este software est&eacute; dispuesto a recibir una respuesta cortante o directamente no recibir respuesta.");

//
// This ends the FAQ entries
//

?>