/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class CountPrefixAndSuffixPairsI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", countPrefixSuffixPairs( new String[]{"a","aba","ababa","aa"} ));
    }

    public static int countPrefixSuffixPairs(String[] words) {
        int count = 0;
        int n = words.length;
        for (int i = 0; i < n - 1; i++) {
            for (int j = i + 1; j < n; j++) {
                if (words[j].startsWith(words[i]) && words[j].endsWith(words[i])) {
                    count++;
                }
            }
        }
        return count;
    }

}
