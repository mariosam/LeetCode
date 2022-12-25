/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class LongestCommonPrefix {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", longestCommonPrefix( new String[]{"dog","racecar","car"} ));
    }

    public static String longestCommonPrefix(String[] strs) {
        String result = "";

        //toma a menor string como base
        Arrays.sort(strs);

        //percorre a menor string ate o final
        outer: for ( int j=1; j <= strs[0].length(); j++ ) {
            String temp = strs[0].substring(0, j);

            //percorre o array
            for ( int i=1; i < strs.length; i++ ) {
                //compara a menor string com as opcoes do array
                if (! temp.equals(strs[i].substring(0, j)) ) break outer;
            }

            result = temp;
        }

        return result;
    }

}
