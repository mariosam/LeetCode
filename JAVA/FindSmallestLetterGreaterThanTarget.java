/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindSmallestLetterGreaterThanTarget {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", nextGreatestLetter( new char[]{'a'}, 'a' ));
    }

    public static char nextGreatestLetter(char[] letters, char target) {
        int left = 0;
        int right = letters.length - 1;
        
        if (target >= letters[letters.length - 1]) return letters[0];
        while (left <= right){
            int mid = (int) Math.floor((left + right) / 2);

            if (letters[mid] > target){
                right = mid - 1;
            } else {
                left = mid + 1;
            }
        }

        return letters[left];
    }

}
