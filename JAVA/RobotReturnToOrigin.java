/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RobotReturnToOrigin {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", judgeCircle("RRRRR"));
    }

    public static boolean judgeCircle(String moves) {
        int x = 0, y = 0;

        for (int i = 0; i < moves.length(); i++) {
            char move = moves.charAt(i);

            if (move == 'L') x++;
            else if (move == 'R') x--;
            else if (move == 'U') y++;
            else if (move == 'D') y--;
        }

        return x == 0 && y == 0;
    }

}
