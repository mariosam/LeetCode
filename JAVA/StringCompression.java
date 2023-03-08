/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class StringCompression {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", compress( new char[]{'a'} ));
    }

    public static int compress(char[] chars) {
        if ( chars.length < 2 ) return chars.length;
    
        char comp = chars[0];
        int count = 1;
        int compressIdx = 0;

        for ( int i=1; i <= chars.length; i++ ) {
            if ( i < chars.length && chars[i] == comp ) {
                count++;
            } else {
                chars[compressIdx] = comp;
                compressIdx++;

                if ( count > 1 ) {
                    String countStr = String.valueOf(count);
                    for ( int j=0; j < countStr.length(); j++ ) {
                        chars[compressIdx+j] = countStr.charAt(j);
                    }
                    compressIdx += countStr.length();
                }

                if ( i < chars.length ) comp = chars[i];

                count = 1;
            }
        }

        return compressIdx;
    }

}
