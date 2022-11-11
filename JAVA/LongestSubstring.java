/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class LongestSubstring {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", lengthOfLongestSubstring( "teste" ));
    }

    public static int lengthOfLongestSubstring(String s) {
        int result = 0;
        int ciclos = 0;
        List<String> arr = new ArrayList<String>();
    
        for ( int i = 0; i < s.length(); i++ ) {
            //verifica se esse char ja existe no substring analisado.
            if ( arr.contains( String.valueOf( s.charAt(i) ) ) ) {
                //reinicia o array com nova sequencia de substring.
                arr = new ArrayList<String>();
                
                //reiniciar o looping pelo primeiro char da sequencia.
                if ( s.length() > ciclos ) {
                    i = ciclos;
                    ciclos++;
                }
            }
            //junta na substring do array.
            arr.add( String.valueOf( s.charAt(i) ) );
    
            //verifica maior contagem.
            if ( arr.size() > result ) result = arr.size();
        }
    
        return result;
    }

}
