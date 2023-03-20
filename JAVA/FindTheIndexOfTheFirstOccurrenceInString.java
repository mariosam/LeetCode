/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheIndexOfTheFirstOccurrenceInString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", strStr( "sadbutsad", "sad" ));
    }

    public static int strStr(String haystack, String needle) {
        return haystack.indexOf(needle);
    }
}
