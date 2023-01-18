/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class MinimumRoundsToCompleteAllTasks {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumRounds( new int[]{1,2,2,1} ));
    }

    public static int minimumRounds(int[] tasks) {
        Arrays.sort(tasks);
        int group = 1;
        int rounds = 0;
    
        if ( tasks.length==1 ) return -1;
    
        for ( int i=1; i < tasks.length; i++ ) {
            //se for igual ao anterior
            if ( tasks[i] == tasks[i-1] ) {
                group++;
            } else {
                //impossivel completar as tarefas
                if ( group == 1 ) return -1;
                //verifica a contagem do grupo
                rounds += checkRounds(group);
                //reinicia contagem
                group = 1;
            }
        }
        //verifica ultimo grupo
        if ( group == 1 ) return -1;
        rounds += checkRounds(group);
    
        return rounds;
    }

    public static int checkRounds(int group) {
        if ( group % 3 == 0 ) return group/3;
    
        for ( int i=group; i > -1; i=i-2 ) {
            if ( i % 3 == 0 ) return ((i/3) + (group-i)/2);
        }
    
        return group/2;
    }

}
