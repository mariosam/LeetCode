/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class CountServersThatCommunicateTest {

    @Test
	public void testCountServersThatCommunicate() throws Exception {
        //Test 1
        int want = 0;
        int got = CountServersThatCommunicate.countServers( new int[][]{{1, 0},{0, 1}} );
        assertEquals(want, got);
        //Test 2
        want = 3;
        got = CountServersThatCommunicate.countServers( new int[][]{{1, 0},{1, 1}} );
        assertEquals(want, got);
        //Test 3
        want = 4;
        got = CountServersThatCommunicate.countServers( new int[][]{{1, 1, 0, 0},{0, 0, 1, 0},{0, 0, 1, 0},{0, 0, 0, 1}} );
        assertEquals(want, got);
	}

}
