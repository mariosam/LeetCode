/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.LinkedList;

public class Dota2Senate {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", predictPartyVictory( "sadbutsad" ));
    }

    public static String predictPartyVictory(String senate) {
        int n = senate.length();
        LinkedList<Integer> RList = new LinkedList<>();
        LinkedList<Integer> DList = new LinkedList<>();

        for (int i=0; i < n; i++) {
            if (senate.charAt(i) == 'R') {
                RList.offer(i);
            } else {
                DList.offer(i);
            }
        }

        while (!RList.isEmpty() && !DList.isEmpty()) {
            int Rindex = RList.poll();
            int Dindex = DList.poll();

            if (Rindex<Dindex) {
                RList.offer(Rindex+n);
            } else {
                DList.offer(Dindex+n);
            }
        }

        return RList.isEmpty() ? "Dire" : "Radiant";
    }
}
