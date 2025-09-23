/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MinimumNumberOfPeopleToTeachTest {

    @Test
	public void testMinimumNumberOfPeopleToTeach() throws Exception {
        //Test 1
        int want = 1;
        int got =  MinimumNumberOfPeopleToTeach.minimumTeachings( 2, new int[][]{{1},{2},{1,2}}, new int[][]{{1,2},{1,3},{2,3}} );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got =  MinimumNumberOfPeopleToTeach.minimumTeachings( 3, new int[][]{{2},{1,3},{1,2},{3}}, new int[][]{{1,4},{1,2},{3,4},{2,3}} );
        assertEquals(want, got);
	}

}
