/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindLuckyIntegerInAnArrayTest {

    @Test
	public void testFindLuckyIntegerInAnArray() throws Exception {
        //Test 1
        int want = 0;
        int got = FindLuckyIntegerInAnArray.findLucky( new int[]{2,2,3,4} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = FindLuckyIntegerInAnArray.findLucky( new int[]{1,2,2,3,3,3} );
        assertEquals(want, got);
        //Test 3
        want = -1;
        got = FindLuckyIntegerInAnArray.findLucky( new int[]{2,2,2,3,3} );
        assertEquals(want, got);
	}

}
