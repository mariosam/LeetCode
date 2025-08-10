/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FruitIntoBaskets {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", totalFruit( new int[]{1,1,4,2,1,3} ));
    }

    public static int totalFruit(int[] fruits) {
        if(fruits.length==0){
            return 0;
        }
        int present = fruits[0];
        int present_index= 0;
        int index = 1, start=0, maxLen = 0;
        while(index<fruits.length && fruits[index]==present){
            index++;
        }
        if(index==fruits.length){
            return index-start;
        }
        int previous = present;
        //int previous_index = index-1;
        present = fruits[index];
        present_index = index;
        while(index<fruits.length){
            if(fruits[index]==previous){
                previous = present;
                present = fruits[index];
                present_index = index;
            }
            else if(fruits[index]!=present){
                maxLen = Math.max(index-start, maxLen);
                start = present_index;
                previous = present;
                present = fruits[index];
                present_index = index;
            }
            index++;
        }
        return Math.max(maxLen, index-start);
    }

}
