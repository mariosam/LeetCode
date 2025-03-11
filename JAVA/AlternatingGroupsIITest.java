/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class AlternatingGroupsIITest {

    @Test
	public void testAlternatingGroupsII() throws Exception {
        //Test 1
        int want = 3;
        int got = AlternatingGroupsII.numberOfAlternatingGroups( new int[]{0,1,0,1,0}, 3 );
        assertEquals(want, got);
        //Test 2
        want = 2;
        got = AlternatingGroupsII.numberOfAlternatingGroups( new int[]{0,1,0,0,1,0,1}, 6 );
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = AlternatingGroupsII.numberOfAlternatingGroups( new int[]{1,1,0,1}, 4 );
        assertEquals(want, got);
	}

}
