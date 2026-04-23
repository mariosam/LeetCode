/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class MirrorDistanceOfAnIntegerTest {

    @Test
	public void testMirrorDistanceOfAnInteger() throws Exception {
        //Test 1
        long want = 27;
        long got = MirrorDistanceOfAnInteger.mirrorDistance(25);
        assertEquals(want, got);
        //Test 2
        want = 9;
        got = MirrorDistanceOfAnInteger.mirrorDistance(10);
        assertEquals(want, got);
        //Test 3
        want = 0;
        got = MirrorDistanceOfAnInteger.mirrorDistance( 7 );
        assertEquals(want, got);
	}

}
