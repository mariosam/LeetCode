/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;
import java.util.Stack;

public class RobotCollisions {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", survivedRobotsHealths( new int[]{5,4,3,2,1}, new int[]{2,17,9,15,10}, "RRRRR" ));
    }

    static class Data {
        int i, p, h;
        char d;

        Data(int i, int p, int h, char d) {
            this.i = i;
            this.p = p;
            this.h = h;
            this.d = d;
        }
    }

    public static List<Integer> survivedRobotsHealths(int[] positions, int[] healths, String directions) {
        int n = positions.length;
        List<Data> arr = new ArrayList<>();

        for (int i = 0; i < n; i++) {
            arr.add(new Data(i, positions[i], healths[i], directions.charAt(i)));
        }

        Collections.sort(arr, Comparator.comparingInt(a -> a.p));

        List<Data> toLeft = new ArrayList<>();
        Stack<Data> st = new Stack<>();

        for (Data p : arr) {
            if (p.d == 'R') {
                st.push(p);
                continue;
            }

            while (!st.isEmpty()) {
                Data top = st.peek();
                if (top.h > p.h) {
                    top.h--;
                    break;
                }
                if (top.h == p.h) {
                    st.pop();
                    p.h = 0;
                    break;
                }
                p.h--;
                st.pop();
            }
            if (st.isEmpty() && p.h != 0) {
                toLeft.add(p);
            }
        }

        toLeft.addAll(st);
        toLeft.sort(Comparator.comparingInt(a -> a.i));

        List<Integer> res = new ArrayList<>();
        for (Data d : toLeft) {
            res.add(d.h);
        }
        return res;
    }

}
