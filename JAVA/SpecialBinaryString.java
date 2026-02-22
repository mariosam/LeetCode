/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;

public class SpecialBinaryString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %s\n", makeLargestSpecial("11011000"));
    }

    public static String makeLargestSpecial(String s) {
        int cnt = 0, i = 0;
		ArrayList<String> v = new ArrayList<String>();
		String res = "";

		for (int j = 0; j < s.length(); ++j) {
			cnt += (s.charAt(j) == '1') ? 1 : -1;

			if (cnt == 0) {
				v.add('1' + makeLargestSpecial(s.substring(i + 1, j)) + '0');
				i = j + 1;
			}
		}

		Collections.sort(v, (x, y) -> y.compareTo(x));

		for (String str : v)
			res += str;

		return res;
    }

}
