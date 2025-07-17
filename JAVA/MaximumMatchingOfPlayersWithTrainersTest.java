/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MaximumMatchingOfPlayersWithTrainersTest {

    @Test
	public void testMaximumMatchingOfPlayersWithTrainers() throws Exception {
        //Test 1
        int want = 2;
        int got = MaximumMatchingOfPlayersWithTrainers.matchPlayersAndTrainers( new int[]{4,7,9}, new int[]{8,2,5,8} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = MaximumMatchingOfPlayersWithTrainers.matchPlayersAndTrainers( new int[]{1,1,1}, new int[]{10} );
        assertEquals(want, got);
	}

}
