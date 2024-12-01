/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class FindChampionIITest {

    @Test
	public void testFindChampionII() throws Exception {
        //Test 1
        int want = 0;
        int got = FindChampionII.findChampion( 3, new int[][]{{0,1},{1,2}} );
        assertEquals(want, got);
        //Test 2
        want = -1;
        got = FindChampionII.findChampion( 4, new int[][]{{0,2},{1,3},{1,2}} );
        assertEquals(want, got);
	}

}
