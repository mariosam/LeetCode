/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DivideIntervalsIntoMinimumNumberOfGroupsTest {

    @Test
	public void testDivideIntervalsIntoMinimumNumberOfGroups() throws Exception {
        //Test 1
        long want = 3;
        long got = DivideIntervalsIntoMinimumNumberOfGroups.minGroups( new int[][]{{5,10},{6,8},{1,5},{2,3},{1,10}} );
        assertEquals(want, got);
        //Test 2
        want = 1;
        got = DivideIntervalsIntoMinimumNumberOfGroups.minGroups( new int[][]{{1,3},{5,6},{8,10},{11,13}} );
        assertEquals(want, got);
	}

}
