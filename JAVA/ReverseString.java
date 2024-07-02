/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ReverseString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", reverseString( new char[]{'a'} ));
    }

    public static Object[] reverseString(char[] s) {
        for (int i = 0, j = s.length - 1; i < s.length / 2; i++, j--) {
            char temp = s[i];
            s[i] = s[j];
            s[j] = temp;
        }
        return null; 
    }

}
