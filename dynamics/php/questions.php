<?php
session_start();
include "Bot.php";
include("Config.php");
$bot = new Bot;

$questions = [
    // //que es covid
    "que es covid?" => "La enfermedad por coronavirus (COVID 19) es una ‎enfermedad infecciosa causada por un ‎coronavirus recientemente descubierto.",
    "coronavirus?" => "Los coronavirus son una extensa familia de virus que pueden causar enfermedades tanto en animales como en humanos.",
    "covid 19?" => "La enfermedad del coronavirus 2019 (COVID-19) es una enfermedad respiratoria que puede transmitirse de persona a persona.",
    // //sintomas
    "sintomas por la enfermedad?" =>"Los síntomas más comunes son fiebre, tos seca y dificultad para respirar. Otros son dolor articular, dolor muscular, dolor de garganta, escurrimiento nasal, conjuntivitis, dolor de pecho, dolor de cabeza.",
    "sintomas por covid?" =>"Sintomas comunes causados por covid Fiebre, Tos seca y dificultad para respirar." ,
    "sintomas por covid 19?" =>"Sintomas inusiales Diarrea, Conjuntivitis, Dolor de cabeza, Pérdida del sentido del olfato o del gusto, Erupciones cutáneas o pérdida del color en los dedos de las manos o de los pies.",
    
    // //apariciones
    "cuando aparecen los síntomas" => "El período de incubación es el tiempo que transcurre entre la infección por el virus y la aparición de los síntomas de la enfermedad. La mayoría de las estimaciones respecto al periodo de incubación de COVID-19 oscilan entre 1 y 14 días, y en general se sitúan en torno a 5-6 días.",
    "apariciones de sintomas?" => "El período de incubación es el tiempo que transcurre entre la infección por el virus y la aparición de los síntomas de la enfermedad. La mayoría de las estimaciones respecto al periodo de incubación de COVID-19 oscilan entre 1 y 14 días, y en general se sitúan en torno a 5-6 días.",
    "en cuantos dias aparecen los sintomas?" => "El período de incubación es el tiempo que transcurre entre la infección por el virus y la aparición de los síntomas de la enfermedad. La mayoría de las estimaciones respecto al periodo de incubación de la COVID-19 oscilan entre 1 y 14 días, y en general se sitúan en torno a 5-6 días.",


    // //duracion

    "cuanto duran los sintomas?" => "El tiempo medio desde el inicio de los síntomas hasta la recuperación es de 2 semanas cuando la enfermedad ha sido leve y 3-6 semanas cuando ha sido grave o crítica.",
    "duracion de sintomas" => "El tiempo medio desde el inicio de los síntomas hasta la recuperación es de 2 semanas cuando la enfermedad ha sido leve y 3-6 semanas cuando ha sido grave o crítica.",
    "recuperacion covid?" => "El tiempo medio desde el inicio de los síntomas hasta la recuperación es de 2 semanas cuando la enfermedad ha sido leve y 3-6 semanas cuando ha sido grave o crítica.",

    // //vulnerables

    "personas que corren mas riesgo?" => "Los principales grupos vulnerables son los mayores de 60 años, enfermedades crónicas: hipertensión arterial, diabetes, obesidad, enfermedades cardiovasculares, enfermedades pulmonares crónicas, cáncer, inmunodeficiencias.",
    "personas en peligros?" => "Los principales grupos vulnerables son los mayores de 60 años, hipertensión arterial, diabetes, enfermedades cardiovasculares, enfermedades pulmonares crónicas, cáncer, inmunodeficiencias.",
    "personas vulnerables?" => "Los principales grupos vulnerables son los mayores de 60 años, hipertensión arterial, diabetes, enfermedades cardiovasculares, enfermedades pulmonares crónicas, cáncer, inmunodeficiencias.",

    // //transmision

    "como se transmite el coronavirus?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    "como se transmite el covid?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    "como se transmite?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    "cómo se transmite?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    "cómo se transmite el covid?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    "transmite el COVID-19?" => "La transmisión es por contacto estrecho con las secreciones respiratorias que se generan con la tos o el estornudo de una persona enferma.",
    
    // //recontagio

    "es posible volverse a contagiar por el virus?" =>"En estos momentos no existen suficientes pruebas para afirmar que sea posible la reinfección Los datos indirectos disponibles de otros coronavirus (SARS) y de modelos animales sugieren que es posible esperar la generación de inmunidad (al menos al corto plazo) tras la recuperación por SARS–CoV–2. Se han descrito algunos casos de pacientes que han tenido nuevamente un resultado positivo a SARS–CoV–2 tras ser dados de alta, pero es probable que esto se deba a errores en la toma de las muestras o, en algunos casos, a una recuperación prolongada, aunque asintomática, con positividad oscilante al virus.",
    "es posible volverse a contagiar por el coronavirus?" =>"En estos momentos no existen suficientes pruebas para afirmar que sea posible la reinfección Los datos indirectos disponibles de otros coronavirus (SARS) y de modelos animales sugieren que es posible esperar la generación de inmunidad (al menos al corto plazo) tras la recuperación por SARS–CoV–2. Se han descrito algunos casos de pacientes que han tenido nuevamente un resultado positivo a SARS–CoV–2 tras ser dados de alta, pero es probable que esto se deba a errores en la toma de las muestras o, en algunos casos, a una recuperación prolongada, aunque asintomática, con positividad oscilante al virus.",
    "volverse a contagiar" =>"Actualmente no existe evidencia suficiente que permita afirmar que una persona que ha pasado la enfermedad pueda volver a infectarse.",

    // //vacuna
    "existe alguna vacuna?" =>"Por el momento no se dispone de vacuna que proteja frente a la COVID-19, pero se están realizando estudios clínicos con diversos candidatos, y sería previsible que en un plazo prudente de tiempo (1 años) se autorice alguna vacuna frente al nuevo coronavirus.",
    "existen vacunas?" =>"Por el momento no se dispone de vacuna que proteja frente a la COVID-19, pero se están realizando estudios clínicos con diversos candidatos, y sería previsible que en un plazo prudente de tiempo (1 años) se autorice alguna vacuna frente al nuevo coronavirus.",
    "vacunas disponibles?" =>"Por el momento no se dispone de vacuna que proteja frente a la COVID-19, pero se están realizando estudios clínicos con diversos candidatos, y sería previsible que en un plazo prudente de tiempo (1 años) se autorice alguna vacuna frente al nuevo coronavirus.",
    
    // ///antibioticos
    "son eficaces los antibióticos para prevenir o tratar el COVID-19?" =>"No. La norma general que debemos recordar es que los antibióticos no son eficaces contra los virus, solo contra las infecciones bacterianas. COVID-19 está causada por un virus, de modo que los antibióticos no sirven frente a ella.",
    "antibioticos para el covid 19?" =>"No. La norma general que debemos recordar es que los antibióticos no son eficaces contra los virus, solo contra las infecciones bacterianas. La COVID-19 está causada por un virus, de modo que los antibióticos no sirven frente a ella.",
    "antibioticos?" =>"La norma general que debemos recordar es que los antibióticos no son eficaces contra los virus, solo contra las infecciones bacterianas. La COVID-19 está causada por un virus, de modo que los antibióticos no sirven frente a ella.",
    
    // //mascotas
    "mi mascota me puede contagiar la covid 19?" =>"Aunque ha habido un caso de un perro infectado en Hong Kong, hasta la fecha no hay pruebas de que un perro, un gato o cualquier mascota pueda transmitir COVID-19.",
    "las mascotas se contagian?" =>"Aunque ha habido un caso de un perro infectado en Hong Kong, hasta la fecha no hay pruebas de que un perro, un gato o cualquier mascota pueda transmitir COVID-19.",
    "animales se pueden contagiar?" =>"Aunque ha habido un caso de un perro infectado en Hong Kong, hasta la fecha no hay pruebas de que un perro, un gato o cualquier mascota pueda transmitir COVID-19.",
   
    // //conceptos
    "que es un virus?" =>"Los virus surgen continuamente y representan un desafío para la salud pública.",
    "que es una epidemia?" =>"Una epidemia es la aparición de más casos de una enfermedad que los esperados en un área dada en un período de tiempo establecido. En este momento, en la epidemia de COVID-19 nos encontramos en el escenario de importación viral.",
    "que es el coronavirus?" =>"El coronavirus SARS-Cov-2 es un virus que apareció en China. Después se extendió a todos los continentes del mundo provocando una pandemia. Actualmente Europa y América son los más afectados.",
    
    // //info
    "información importante a considerar?" =>"La mayoría de las personas (alrededor del 80%) se recupera de la enfermedad sin necesidad de realizar ningún tratamiento especial.",
    "informacion que se debe tomar en cuenta?" =>"Alrededor de 1 de cada 6 personas que contraen el nuevo coronavirus puede desarrollar una enfermedad grave con dificultad para respirar.",
    "dato importante?" =>"En torno al 2% de las personas que han contraído la enfermedad han muerto. Las personas que tengan fiebre, tos y dificultad para respirar deben buscar atención médica.",
    
    // //tratamiento
    "tratamiento?" =>"Hasta la fecha, no hay vacunas o medicamentos específicos contra la COVID-19. Se están investigando tratamientos, que serán probados en ensayos clínicos.",
    "hay cura?" =>"Hasta la fecha, no hay vacunas o medicamentos específicos contra la COVID-19. Se están investigando tratamientos, que serán probados en ensayos clínicos.",
    "medicamento tomar?" =>"Hasta la fecha, no hay vacunas o medicamentos específicos contra la COVID-19. Se están investigando tratamientos, que serán probados en ensayos clínicos.",
      
    // //sintomas post-covid
    "sintomas post-covid?" =>"Un estudio italiano, realizado a 143 pacientes a los dos meses de seguimiento, encontró que en el 87.4% de los pacientes que se habían recuperado de COVID-19, persistía al menos 1 síntoma siendo los más frecuentes fatiga, dificultad para respirar, dolores musculares y articulares, tos y pérdida del olfato y gusto.",
    "síntomas post-covid?" =>"Un estudio italiano, realizado a 143 pacientes a los dos meses de seguimiento, encontró que en el 87.4% de los pacientes que se habían recuperado de COVID-19, persistía al menos 1 síntoma siendo los más frecuentes fatiga, dificultad para respirar, dolores musculares y articulares, tos y pérdida del olfato y gusto.",
    "secuelas?" =>"Un estudio italiano, realizado a 143 pacientes a los dos meses de seguimiento, encontró que en el 87.4% de los pacientes que se habían recuperado de COVID-19, persistía al menos 1 síntoma siendo los más frecuentes fatiga, dificultad para respirar, dolores musculares y articulares, tos y pérdida del olfato y gusto.",
    "secuelas covid?" =>"Un estudio italiano, realizado a 143 pacientes a los dos meses de seguimiento, encontró que en el 87.4% de los pacientes que se habían recuperado de COVID-19, persistía al menos 1 síntoma siendo los más frecuentes fatiga, dificultad para respirar, dolores musculares y articulares, tos y pérdida del olfato y gusto.",

    // //conceptos
    "carga viral?" =>"Es la sobreexposición que tienes al virus que (quizá teniéndolo o no) ingresas a un ambiente donde una o más personas son portadores. Atacando con mayor intensidad al organismo, acelerando los procesos y haciendo que los medicamentos surtan poco o casi nada de efecto",
    "carga viral" =>"Es la sobreexposición que tienes al virus que (quizá teniéndolo o no) ingresas a un ambiente donde una o más personas son portadores. Atacando con mayor intensidad al organismo, acelerando los procesos y haciendo que los medicamentos surtan poco o casi nada de efecto",
    "que es la carga viral?" =>"Es la sobreexposición que tienes al virus que (quizá teniéndolo o no) ingresas a un ambiente donde una o más personas son portadores. Atacando con mayor intensidad al organismo, acelerando los procesos y haciendo que los medicamentos surtan poco o casi nada de efecto",
    "qué es la carga viral?" =>"Es la sobreexposición que tienes al virus que (quizá teniéndolo o no) ingresas a un ambiente donde una o más personas son portadores. Atacando con mayor intensidad al organismo, acelerando los procesos y haciendo que los medicamentos surtan poco o casi nada de efecto",

    // //prevención
    "mantenerme seguro?" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "prevención?" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "mantenerme seguro" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "prevención" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "mantenerme seguro." =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "prevención." =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "prevencion" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",
    "prevencion?" =>"Utiliza mascarilla, lávate las manos, mantenga el distanciamiento social, evita tocarte la cara",

    //PREGUNTAS

    //name
    "como te llamas?" =>"Soy CoronaBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy CoronaBot y estoy para servirte",
    "tienes nombre?" =>"Soy CoronaBot y estoy para servirte" . $status,


    //saludo
    //"hola" =>"Hola que tal!",
    //"un saludo" =>"como te va",
    //"hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you later ♥",
    //
    "what is your name?" =>" my name is CoronaBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo soy " . $bot->getGender()
    
];
        
if (isset($_GET['msg'])) {
    $user = $_SESSION['user'];
    $status = $_SESSION['status'];
    $periodoRest=14;
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        global $status; //consulta a la bd
        global $periodoRest;//consulta a la bd
        global $user;//session
        if ($msg == 'hi' || $msg == "hello" || $msg == "hola" || $msg == "un saludo") {
            $botty->reply("Hola " . $user);//NOMBRE DE USUARIO EN SESION
            if ($status==0) {//usuario sin covid, CONSULTA BD
                $botty->reply(" Tienes o has presentado sintomas de coronavirus? Si tu respuesta es afirmativa confirma 'Tengo covid' o 'Presento sintomas de covid'.");
            }else {
                $botty->reply("Te restan $periodoRest día/s de tu periodo de aslamiento, te recordamos resguardarte y en caso de complicaciones llamar a la linea de emergencia nacional (911) para un adecuada atención. ¿Qué dudas tienes?");
            }
        }elseif ($msg == 'tengo covid' || $msg == 'presento sintomas de covid'){
                if ($status==0) {
                    $botty->reply("Eso no es buena señal!! Te recomiendo aislarte en un periodo no menor de 14 días para evitar algún contagio externo. a partir de hoy llevaré tu conteo del días de tu aislamiento. 14 días restan desde hoy. ¿Qué dudas tienes?");
                    //$status=1;//registrar en la bd el cambio de estado a covid e iniciar periodo en 14 dias
                    $conexion = connect();
                    if(!$conexion) {
                      echo "No se pudo conectar con el servidor. <br>
                      Cuando llames a apoyo técnico, muéstrales el texto a continuación:";
                      echo mysqli_connect_error()."<br>";
                      echo mysqli_connect_errno()."<br>";
                      exit();
                    }
                    else {
                    $change="UPDATE user SET status='1' WHERE status='0' AND user='$user'";
                    $query_status = mysqli_query($conexion,$change);
                    if($query_status){
                        echo "Cuidado "; 
                    }
                    else{
                        echo "ay";
                    }
                    }
                }else{
                    $botty->reply("Te restan $periodoRest día/s de tu periodo de aslamiento, te recordamos resguardarte y en caso de complicaciones llamar a la linea de emergencia nacional (911) para un adecuada atención. ¿Qué dudas tienes?");
                    $botty->reply("¿Te has sentido con fiebre? Si tu respuesta es afirmativa responde 'tengo fiebre'.");
                }
                    
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, no entendí. Solo soy un chat de Coronavirus");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
?>