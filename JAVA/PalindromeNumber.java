/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class PalindromeNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", isPalindrome( 121 ));
    }

    public static boolean isPalindrome(int x) {
        //se for negativo
        if ( x < 0 ) return false;
    
        //compara o original com a copia invertida
        StringBuilder reverse = new StringBuilder();
        reverse.append( x );
        reverse.reverse();

        return String.valueOf(x).contentEquals( reverse );
    }

}
