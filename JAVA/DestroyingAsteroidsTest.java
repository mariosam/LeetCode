/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class DestroyingAsteroidsTest {

    @Test
	public void testDestroyingAsteroids() throws Exception {
        //Test 1
        boolean want = true;
        boolean got = DestroyingAsteroids.asteroidsDestroyed(10, new int[]{3,9,19,5,21});
        assertEquals(want, got);
        //Test 2
        want = false;
        got = DestroyingAsteroids.asteroidsDestroyed(5, new int[]{4,9,23,4});
        assertEquals(want, got);
	}

}
