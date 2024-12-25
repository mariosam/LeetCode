/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ConstructStringWithRepeatLimit {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", repeatLimitedString( "cczazcc", 2 ));
    }

    public static String repeatLimitedString(String s, int repeatLimit) {
        int[] freq = new int[26];
        StringBuilder sb = new StringBuilder();
        for(char c : s.toCharArray()) freq[c - 'a']++;
        for(int i = 25; i >= 0; i--) {
            if(freq[i] == 0) continue;
            int j = Math.min(freq[i], repeatLimit);
            while(j-- > 0) {
                sb.append((char)('a' + i));
                freq[i]--;
            }
            if(freq[i] == 0) continue;
            for(j = i - 1; j >= 0 && freq[j] == 0; j--);
            if(j == -1) return sb.toString();
            sb.append((char)('a' + j));
            freq[j]--;
            i++;//keep i
        }
        return sb.toString();
    }

}
