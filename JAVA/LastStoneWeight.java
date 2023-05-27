/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Collections;
import java.util.PriorityQueue;

public class LastStoneWeight {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", lastStoneWeight( new int[]{1,3} ));
    }

    public static int lastStoneWeight(int[] stones) {
        if(stones.length == 0) return 0;
        PriorityQueue<Integer> heap = new PriorityQueue<>(Collections.reverseOrder());
        for ( int stone : stones ) heap.offer(stone);
        while ( heap.size() > 1 ) heap.offer(heap.poll() - heap.poll());
				
        return heap.peek();
    }

}
