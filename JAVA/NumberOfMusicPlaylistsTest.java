/** 
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ mvn clean test -Dtest=your.package.TestClassName
 */ 
package JAVA;

import static org.junit.Assert.assertEquals;
import org.junit.Test;

public class NumberOfMusicPlaylistsTest {

    @Test
	public void testNumberOfMusicPlaylists() throws Exception {
        //Test 1
        int want = 6;
        int got = NumberOfMusicPlaylists.numMusicPlaylists( 3, 3, 1 );
        assertEquals(want, got);
        //Test 2
        want = 6;
        got = NumberOfMusicPlaylists.numMusicPlaylists( 2, 3, 0 );
        assertEquals(want, got);
        //Test 3
        want = 2;
        got = NumberOfMusicPlaylists.numMusicPlaylists( 2, 3, 1 );
        assertEquals(want, got);
	}

}
