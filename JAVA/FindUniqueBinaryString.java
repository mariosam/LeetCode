/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindUniqueBinaryString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %s\n", findDifferentBinaryString(new String[]{"01", "10"}));
    }

    public static String findDifferentBinaryString(String[] nums) {
        StringBuilder res = new StringBuilder();

        for (int i = 0; i < nums.length; i++) {
            // Pega o caractere da diagonal e inverte
            res.append(nums[i].charAt(i) == '0' ? '1' : '0');
        }

        return res.toString();
    }
}
