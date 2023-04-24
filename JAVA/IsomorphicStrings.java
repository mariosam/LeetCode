/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class IsomorphicStrings {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isIsomorphic( "egg", "add" ));
    }

    public static boolean isIsomorphic(String s, String t) {
        for ( int i=0; i < s.length(); i++ ) {
            if ( s.indexOf(s.charAt(i) ) != t.indexOf(t.charAt(i)) ){
                return false;
            }
        }
        
        return true;
    }

}
