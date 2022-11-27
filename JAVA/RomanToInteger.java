/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class RomanToInteger {

    static Map<Character,Integer> ROMAN = new HashMap<Character,Integer>();

    static {
        ROMAN.put( 'I', 1 );
        ROMAN.put( 'V', 5 );
        ROMAN.put( 'X', 10 );
        ROMAN.put( 'L', 50 );
        ROMAN.put( 'C', 100 );
        ROMAN.put( 'D', 500 );
        ROMAN.put( 'M', 1000 );
    }

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", romanToInt( "MCMXCIV" ));
    }

    public static int romanToInt(String s) {
        int soma = 0;
    
        for ( int i=0; i < s.length(); i++ ) {
            if ( i+1 < s.length() && ROMAN.get( s.charAt(i) ) < ROMAN.get( s.charAt(i+1) )  ) {
                soma = soma + (ROMAN.get( s.charAt(i+1) ) - ROMAN.get( s.charAt(i) ));
    
                i++;
            } else {
                soma += ROMAN.get( s.charAt(i) );
            }
        }
        
        return soma;
    }

}
