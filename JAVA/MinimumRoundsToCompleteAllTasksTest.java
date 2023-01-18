/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumRoundsToCompleteAllTasksTest {

    @Test
	public void testMinimumRoundsToCompleteAllTasks() throws Exception {
        //Test 1
        int want = 4;
        int got = MinimumRoundsToCompleteAllTasks.minimumRounds( new int[]{2,2,3,3,2,4,4,4,4,4} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = MinimumRoundsToCompleteAllTasks.minimumRounds( new int[]{2,3,3} );
        assertEquals(want, got);
        //Test 3
        want = 20;
        got = MinimumRoundsToCompleteAllTasks.minimumRounds( new int[]{69,65,62,64,70,68,69,67,60,65,69,62,65,65,61,66,68,61,65,63,60,66,68,66,67,65,63,65,70,69,70,62,68,70,60,68,65,61,64,65,63,62,62,62,67,62,62,61,66,69} );
        assertEquals(want, got);
        //Test 4
        want = -1;
        got = MinimumRoundsToCompleteAllTasks.minimumRounds( new int[]{1,2,1} );
        assertEquals(want, got);
	}

}
