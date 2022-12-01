/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class LengthOfLastWord {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", lengthOfLastWord( "teste" ));
    }

    public static int lengthOfLastWord(String s) {
        //remove os espacos em branco
        s = s.trim();
        //inicializa retorno
        int result = 0;
    
        //percorre a frase de tras pra frente
        for ( int i = s.length()-1; i > -1; i-- ) {
            //quando encontrar um espaco em branco interrompe
            if ( s.charAt(i) == ' ' ) break;
            result++;
        }
    
        return result;
    }

}
