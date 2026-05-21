/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class JumpGameIIITest {

    @Test
	public void testJumpGameIII() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = JumpGameIII.canReach( new int[]{4,2,3,0,3,1,2}, 5 );
        assertEquals(want, got);
        //Test 2
        want = true;
        got = JumpGameIII.canReach( new int[]{4,2,3,0,3,1,2}, 0 );
        assertEquals(want, got);
        //Test 3
        want = false;
        got = JumpGameIII.canReach( new int[]{3,0,2,1,2}, 2 );
        assertEquals(want, got);
	}

}
