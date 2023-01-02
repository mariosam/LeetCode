/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MajorityElement {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", majorityElement( new int[]{3,2,2,3} ));
    }

    public static int majorityElement(int[] nums) {
        int n = 0;
        int sum = 1;
        int contando = 0;
        //coloca em ordem crescente para fazer contagem
        Arrays.sort( nums );

        //percorre o array contando os Ns
        for ( int i=1; i < nums.length; i++ ) {
            //se houve troca de N
            if ( nums[i] != nums[i-1] ) {
                //e a contagem atual for maior que a contagem anterior
                if ( sum > contando ) {
                    n = nums[i-1];
                    contando = sum;
                }
                //reinicia contagem do novo N
                sum = 1;
            } else {
                //somando os N
                sum++;
            }
        }
        
        //verifica se o ultimo N eh o maior
        if ( sum > contando ) n = nums[nums.length-1];

        return n;
    }

}
