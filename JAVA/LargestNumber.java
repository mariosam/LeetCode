/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class LargestNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", largestNumber( new int[]{1,2} ));
    }

    public static String largestNumber(int[] nums) {
        List<String> list = new ArrayList<>();
		for (int i = 0; i < nums.length; i++) {
			list.add(String.valueOf(nums[i]));
		}

		list.sort((o1,o2)->{
			String s1=o1+o2;
			String s2=o2+o1;
			return s2.compareTo(s1);
			
		});
		if ("0".equals(list.get(0))) {
			return "0";
		}

		StringBuilder sb = new StringBuilder();
		for (String s : list) {
			sb.append(s);
		}
		return sb.toString();
    }

}
